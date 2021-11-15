import React, {useState} from 'react';
import logo from "../../../../../resources/images/logo.svg";
import {Menu, Layout} from "antd";
import {
    AimOutlined, BarChartOutlined,
    ContactsOutlined,
    DollarCircleOutlined,
    NodeIndexOutlined,
    SettingOutlined, TagsOutlined,
    UserOutlined
} from "@ant-design/icons";

const {Sider} = Layout;
const {SubMenu} = Menu;

const SiderMenu = (props) => {
    const [collapsed, setCollapsed] = useState(false)

    return (
        <Sider collapsible collapsed={collapsed} onCollapse={setCollapsed} width={240}>
            <div className="logo">
                <a href="/">
                    <img src={logo} alt="Cyber konsultant" />
                </a>
            </div>
            <Menu selectable={false} theme="dark" defaultSelectedKeys={[window.location.pathname]} mode="inline" defaultOpenKeys={['/recommendations', '/mapping', '/crm', '/account/billing', '/account/settings', '/crm/_mailing', '/feed/_']}>
                {/*<Menu.Item key="/activities" icon={<BarChartOutlined />}>*/}
                {/*    <a href="/activities">Aktywności</a>*/}
                {/*</Menu.Item>*/}
                <SubMenu key="/recommendations" icon={<AimOutlined />} title="Rekomendacje">
                    {/*<Menu.Item key="/feed/ranking">*/}
                    {/*    <a href="/feed/ranking">Ranking produktów</a>*/}
                    {/*</Menu.Item>*/}
                    <Menu.Item key="/frames/list">
                        <a href="/frames/list">
                            Ramki rekomendacji
                        </a>
                    </Menu.Item>
                </SubMenu>
                <SubMenu key="/feed/_" icon={<TagsOutlined />} title="Feed">
                    <Menu.Item key="/feed">
                        <a href="/feed">Lista produktów</a>
                    </Menu.Item>
                    <Menu.Item key="/feed/scenarios">
                        <a href="/feed/scenarios">Scenariusze</a>
                    </Menu.Item>
                </SubMenu>
                <SubMenu key="/mapping" icon={<NodeIndexOutlined />} title="Mapowanie danych">
                    <Menu.Item key="/mapping/features">
                        <a href="/mapping/features">Atrybuty</a>
                    </Menu.Item>
                    <Menu.Item key="/mapping/categories">
                        <a href="/mapping/categories">Kategorie</a>
                    </Menu.Item>
                </SubMenu>
                <SubMenu key="/crm" icon={<ContactsOutlined />} title="CRM">
                    <Menu.Item key="/crm/segments">
                        <a href="/crm/segments">Segmenty</a>
                    </Menu.Item>
                    <Menu.Item key="/crm/users">
                        <a href="/crm/users">Lista klientów</a>
                    </Menu.Item>
                    <SubMenu key="/crm/_mailing" title="Mailing">
                        <Menu.Item key="/crm/mailing">
                            <a href="/crm/mailing">Mailing</a>
                        </Menu.Item>
                        <Menu.Item key="/crm/mailing/senders">
                            <a href="/crm/mailing/senders">Nadawcy</a>
                        </Menu.Item>
                    </SubMenu>
                </SubMenu>
                <SubMenu key="/account/billing" icon={<DollarCircleOutlined />} title="Rozliczenia">
                    <Menu.Item key="/account/billing/invoices">
                        <a href="/account/billing/invoices">Faktury</a>
                    </Menu.Item>
                    <Menu.Item key="/account/billing/payments">
                        <a href="/account/billing/payments">Płatności</a>
                    </Menu.Item>
                </SubMenu>
                <SubMenu key="/account/settings" icon={<SettingOutlined />} title="Ustawienia">
                    <Menu.Item key="/account/settings/account">
                        <a href="/account/settings/account">Dane konta</a>
                    </Menu.Item>
                    <Menu.Item key="/account/settings/billing">
                        <a href="/account/settings/billing">Dane rozliczeniowe</a>
                    </Menu.Item>
                </SubMenu>
            </Menu>
        </Sider>
    )
}

export default SiderMenu